#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
void Bai1(){
	int i, sum = 0;
	int n;
	printf(" Nhap so n : ");
	scanf("%d",&n);
	if(n <= 0){
		printf(" n khong phai so hoan thien \n");
	}
	else{
		for(i=1; i < n; i++)
		{
			if(n%i == 0) sum += i;
		}
		if(n==sum){
			printf(" n la so hoan thien \n");
		
		}
		else{
			printf(" n khong phai la so hoan thien \n ");
		}
}

	
}
void Bai2(){
	float a, b, c, p, P,S;
	printf(" Nhap 3 canh cua tam giac : \n");
	scanf("%f %f %f", &a, &b, &c);
	if(a+b> c && a+c>b && b+c>a){
		P = a;
		P = P + b;
		P = P + c;
		p = P/2;
		S = sqrt(p*(p-a)*(p-b)*(p-c));
		printf(" Dien tich tam giac P = %f \n",P);
		printf(" Dien tich tam giac S = %f \n" ,S);
		
	}
	else{
		printf(" Ba so tren khong phai la ba canh cua 1 tam giac \n");
	}
	
	
}
/*Bai 3*/
void sapxeptheoten(char dslop[1000][30], int n, float diem[100]){
	int i,j; char s[30];
	float x;
    for(i=0;i<n-1;i++)
      for(j=i+1;j<n;j++)
          if(strcmp(strrchr(dslop[i],' '),strrchr(dslop[j],' '))>0){
            strcpy(s,dslop[i]);
            strcpy(dslop[i],dslop[j]);
            strcpy(dslop[j],s);
            x= diem[i]; diem[i]=diem[j], diem[j] = x;
			}
}
void sapxeptheodiem(char dslop[1000][30], int n, float diem[100])
{
	int i,j; char s[30];
	float x;
    for(i=0;i<n-1;i++)
      for(j=i+1;j<n;j++)
          if(diem[i]<diem[j]){
            strcpy(s,dslop[i]);
            strcpy(dslop[i],dslop[j]);
            strcpy(dslop[j],s);
            x= diem[i]; diem[i]=diem[j], diem[j] = x;
			}
}
void inds(char dslop[1000][30], int n, float diem[100]){
	int i;
	printf("\n Danh sach hoc sinh da sap xep la:\n");
    for(i=0;i<n;i++){
        printf("\n %d. %s %-5.1f",i+1, dslop[i], diem[i]);
        if(diem[i]>10) printf("   Truong Bo Mon");
        else if(diem[i] >8) printf("    Pho Bo Mon ");
        else if(diem[i]>6) printf("    Giang Vien ");
        else if(diem[i]>4) printf(" Giao Vu");
	}
}
void bosung(char dslop[1000][30], int *n, float diem[100]){
	int k,i; char s[30];
	printf("\nnhap vao so can bo bo sung =");scanf("%d",&k);
	 for(i=0;i<k;i++){
	    printf("\n Nhap ten can bo bo sung thu %d :",i+1);
        dslop[*n+i][0]=' ';
        fflush(stdin);gets(s);strcat(dslop[*n+i],s);
        printf("\nNhap luong cua can bo bo sung thu %d: ", i+1);
        scanf("%f", &diem[*n+i]);
		}
	*n=*n+k;
}
void xoadanhsach(char dslop[1000][30], int *n, float diem[100]){
	int i;
	int stt;
	for(i=0;i<*n;i++){
        printf("\n %d. %s",i+1, dslop[i]);
        
	}
	printf(" Nhap so thu tu can bo muon xoa : ");
	scanf("%d",&stt);
	if(stt < 1 || stt > *n-1){
		printf(" Khong ton tai can bo ");
	}
	else{
		
		int k;
		for(k = stt-1; k<*n-1; k++){
			strcpy(dslop[k],dslop[k+1]);
			diem[k] = diem[k+1];
		}
		*n = *n - 1;
	}
	
	
	
}
void Bai3(){
		printf("Ho va ten : Le Cong Thanh \n");
		printf("MSSV : 20164820\n");
		char dslop[100][30],s[30];
    	int i,j,n,c;
    	float diem[100];
    	do {printf("\n Nhap vao so can bo cua don vi n= ");
      		scanf("%d",&n);}
    while(n<=0||n>100);
    for(i=0;i<n;i++){
	    printf("\n Nhap ten can bo thu %d  :",i+1);
        dslop[i][0]=' ';
        fflush(stdin);gets(s);strcat(dslop[i],s);
        printf("Nhap vao luong cua can bo thu %d  :", i+1);
        scanf("%f", &diem[i]);
		}
do{
printf("\nBan muon lam gi tiep theo? Lua chon va nhan \n1. bo sung \n2. sap xep theo ten \n3. sap xep theo diem");
printf("\n4. in danh sach \n5. Xoa danh sach  \nBam phim khac de thoat     : ");
scanf("%d",&c);
switch(c){
	case 1:{
		bosung(dslop,&n, diem);
		break;
	}
	case 2:{
	    sapxeptheoten(dslop, n, diem);
		printf("\n da sap xep");
		break;
		}
	case 3:{
		sapxeptheodiem(dslop, n, diem);
		printf("\n da sap xep");
}
    case 4:{
		inds(dslop,n, diem);
		break;
	}
	case 5:{
		xoadanhsach(dslop,&n,diem);
		break;
	}
  
    default:{
	    char l;
	    printf("\nBan co thuc su muon thoat? nhan Y/y de thoat, nhan phim khac de tiep tuc ");
	    fflush(stdin);scanf("%c",&l);
	    if(l=='y'||l=='Y') ;else c=1;
	    break;
	    }
}
}while((c==1)||(c==2)||(c==3)||c==4||c==5);

	
}
int main(int argc, char *argv[]) {
	int sobai;
	char kiemtraxong ;
	while(kiemtraxong!= 'y' && kiemtraxong != 'Y'){
	printf(" Le Cong Thanh - 20164834 \n ");
	printf(" Bai 1 : Kiem tra so hoan thien \n");
	printf(" Bai 2 : Tinh dien tich chu vi cua tam giac \n");
	printf(" Bai 3 : Danh sach can bo \n");
	printf(" Ban muon chon bai nao : ");
	scanf("%d", &sobai);
	switch(sobai){
		case 1:
			Bai1();
			break;
		case 2:
			Bai2();
			break;
		case 3:
			Bai3();
			break;
	}
	printf(" Ban muon ket thuc khong ? Neu co nhap y hoac Y, neu khong nhan phim bat ki : ");
	fflush(stdin);
	scanf("%c",&kiemtraxong);
	}
	

}
