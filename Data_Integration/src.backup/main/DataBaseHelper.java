package main;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.PreparedStatement;

public class DataBaseHelper {
	private static final String url = "jdbc:mysql://localhost:3306/";
	private static final String name = "com.mysql.jdbc.Driver";
	private static final String user = "root";
	private static final String password = "1234";

	public Connection conn = null;
	public PreparedStatement pst = null;

	public DataBaseHelper(String db, String sql) {
		try {
			Class.forName(name);
			conn = DriverManager.getConnection(url + db, user, password);
			pst = conn.prepareStatement(sql);
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	public void close() {
		try {
			this.conn.close();
			this.pst.close();
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
