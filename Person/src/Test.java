
public class Test {
 public static void main(String[] args){
	 
	 Person p = new Person();
	 
	 Person taro = new Person();
	 taro.name = "taro";
	 taro.age = 18;
	 System.out.println(taro.name);
	 System.out.println(taro.age);
	 
	 Person jiro = new Person("jiro",20);
	 System.out.println(jiro.name);
	 System.out.println(jiro.age);
	 
	 Person hanako =new Person(123);
	 System.out.println(hanako.name);
	 System.out.println(hanako.age);
 
	 Person saburo = new Person("saburo");
	 System.out.println(saburo.name);
	 System.out.println(saburo.age);
	 
	 Person kojiro = new Person(17,"kojiro");
	 System.out.println(kojiro.name);
	 System.out.println(kojiro.age);
 }
 }
 

