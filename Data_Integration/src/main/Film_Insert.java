package main;

import java.sql.SQLException;
import java.text.DecimalFormat;
import java.util.ArrayList;

public class Film_Insert {

	public void insert_film_info(ArrayList<Film> films) {
		for (Film f : films) {
			StringBuilder str = new StringBuilder();
			str.append("insert into film_info values (");
			str.append(f.getId() + ",'");
			str.append(f.getName() + "','");
			String directors = "";
			for (String director : f.getDirectors()) {
				directors += (director + " ");
			}
			str.append(directors + "','");
			String actors = "";
			for (String actor : f.getActors()) {
				actors += (actor + " ");
			}
			str.append(actors + "',");
			DecimalFormat df = new DecimalFormat("######0.0");
			Double score = Double.parseDouble(df.format(f.getScore()));
			str.append(score + ",'");
			str.append(f.getShow_time() + "','");
			String types = "";
			for (String type : f.getTypes()) {
				types += (type + " ");
			}
			str.append(types + "','");
			str.append(f.getDescription() + "',");
			str.append(f.getDuration() + ");");
			String sql = str.toString();
			DataBaseHelper dbh = new DataBaseHelper("film_total", sql);
			try {
				dbh.pst.execute();
			} catch (SQLException e) {
				e.printStackTrace();
			}

		}

	}

}
