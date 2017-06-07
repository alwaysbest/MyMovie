package main;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

public class Film_Name_Extract {

	private ArrayList<Film> films = null;

	private ArrayList<String> film_names = null;

	public Film_Name_Extract() {
		films = new ArrayList<Film>();
		film_names = new ArrayList<String>();
	}

	public ArrayList<Film> get_file_name() {
		this.add_film_name("film_douban2");
		this.add_film_name("film_shiguang");
		this.add_film_name("film_maoyan");
		return this.films;
	}

	private void add_film_name(String source) {
		String sql_film_name = "select title,id from film_info;";
		DataBaseHelper dbh = new DataBaseHelper(source, sql_film_name);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				int id = 1;
				while (rs.next()) {
					String f_n = rs.getString("title");
					String film_name = preTreat(f_n);
					if (!film_names.contains(film_name)) {
						film_names.add(film_name);
						Film f = new Film(id);
						f.setName(film_name);
						f.addPreid(rs.getString("id") + source.substring(5, 6));
						films.add(f);
						id++;
					} else {
						this.addId(rs.getString("id") + source.substring(5, 6), film_name);
					}
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private void addId(String id, String film_name) {
		for (Film f : films) {
			if(f.getName().equals(film_name)){
				f.addPreid(id);
			}
		}
	}

	private String preTreat(String fn) {
		fn.trim();
		if (fn.indexOf(':') != -1) {
			fn = fn.substring(0, fn.indexOf(':')) + fn.substring(fn.indexOf(':') + 1);
		}
		if (fn.indexOf("：") != -1) {
			fn = fn.substring(0, fn.indexOf("：")) + fn.substring(fn.indexOf("：") + 1);
		}
		if (fn.indexOf("之") != -1) {
			fn = fn.substring(0, fn.indexOf("之")) + fn.substring(fn.indexOf("之") + 1);
		}
		return fn;
	}

}
