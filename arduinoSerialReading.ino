/*
 * By Swornim Shrestha
 * 22/06/2016 Wed
 * 9:15 PM Nepal 
 */
 int LED= 13;

void setup() {
Serial.begin(9600); //Serial Communication 

pinMode(LED, OUTPUT );//Declaring pin mode of LED 

} 
void loop() {
while (Serial.available() == 0); //wait until Serial port is open

//read from the serial connection; the - '0' is to cast the values as the int and not the ASCII code
int val = Serial.read() - '0';

//checking value of Serial read
if(val == 1 ){
Serial.println("LED is on");
digitalWrite( LED, HIGH ); // LED TURNED ON
}
if(val== 2 ){
Serial.println("LED is off");
digitalWrite( LED, LOW ); // LOW VOLTAGE - TURNED OFF
}

}
