package main;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

public class Film_Name_Extract {

	private ArrayList<Film> films = null;

	public Film_Name_Extract() {
		films = new ArrayList<Film>();
	}

	public ArrayList<Film> get_file_name() {
		ArrayList<String>
		this.add_film_name("film_douban2");
		this.add_film_name("film_shiguang");
		this.add_film_name("film_maoyan");
		return this.films;
	}

	private void add_film_name(String source) {
		String sql_film_name = "select title from film_info;";
		DataBaseHelper dbh = new DataBaseHelper(source, sql_film_name);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					String film_name = rs.getString("title");
					if (!film_names.contains(film_name)) {
						film_names.add(film_name);
					}
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
