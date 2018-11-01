package com.internousdev.template009.util;



public class Test{
	public static String isMultipleOf4(int n){
		String resultMessage = "";
		if( n % 4 == 0 ){
			resultMessage = n + "は４で割り切れます";
		}else{
			resultMessage = n + "は４で割り切れますnn";
		}
		return resultMessage;
	}

	public static void main(String[] args){
		System.out.println(isMultipleOf4(123452141));
	}
}