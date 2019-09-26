#include <stdio.h>

int main (){
	
	FILE *filePtr;

	filePtr = fopen("simple.txt", "w+");
	fputs("Hello World!", filePtr);
	fclose(filePtr);
	
	filePtr = fopen("secret.txt","r");
	char buffer [1023];
	fgets(buffer, 1023, filePtr);
	printf("secret.txt : \n %s", buffer);
	fclose(filePtr);


}
