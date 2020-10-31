#include<LPC13xx.h>
#include "lpc13_uart.h"

unsigned int Q;

void delay(){
int i=0;
	for(i=0;i<1000000;){
	i++;
	}
}


int main(void){
	
	
  initUART();

	while(1){

         uartWriteString("we put it down ... \r\n");
		     

	}

}

