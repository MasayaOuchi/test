package com.internousdev.template009.util;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DBConnector {
	private static String driverName = "com.mysql.jdbc.Driver";
	private static String url = "jdbc:mysql://localhost/ecsite";
	
	private static String user = "root";
	private static String password = "mysql";
	
	 public Connection get Connection(){
		 Connection con = null;
	 }

}
