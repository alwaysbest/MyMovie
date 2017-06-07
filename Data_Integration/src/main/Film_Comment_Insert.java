package main;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;

public class Film_Comment_Insert {

	public void comment_insert(ArrayList<Comment> comments) {
		for (Comment c : comments) {
			StringBuilder str = new StringBuilder();
			str.append("insert into film_comment values (");
			str.append(c.getId() + ",'");
			str.append(c.getUser() + "',");
			str.append(c.getScore() + ",");
			str.append(c.getUseful() + ",'");
			str.append(c.getContent() + "');");
			String sql = str.toString() + "\n";

			FileWriter fw = null;
			try {
				File f = new File("C:/Users/81429_000/Documents/GitHub/MyMovie/Data_Integration/sql.txt");
				fw = new FileWriter(f, true);
			} catch (IOException e) {
				e.printStackTrace();
			}
			PrintWriter pw = new PrintWriter(fw);
			pw.println(sql);
			pw.flush();
			try {
				fw.flush();
				pw.close();
				fw.close();
			} catch (IOException e) {
				e.printStackTrace();
			}

			// DataBaseHelper dbh = new DataBaseHelper("film_total", sql);
			// try {
			// dbh.pst.execute();
			// } catch (SQLException e) {
			// e.printStackTrace();
			// }
		}
	}

}
