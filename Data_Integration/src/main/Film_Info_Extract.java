package main;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

public class Film_Info_Extract {
	public void extract_film_info(ArrayList<Film> films) {
		if (films == null) {
			return;
		}
		for (Film f : films) {
			for (String pid : f.getPid()) {
				String id = pid.substring(0, pid.length() - 1);
				String platform = pid.substring(pid.length() - 1);
				if (platform.equals("d")) {
					this.douban_process(id, f);
				} else if (platform.equals("s")) {
					this.shiguang_process(id, f);
				} else if (platform.equals("m")) {
					this.maoyan_process(id, f);
				} else {
					continue;
				}
			}
		}
	}

	private void douban_process(String id, Film f) {
		String sql = "select * from film_info where id = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_douban2", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					// score
					double score = Double.parseDouble(rs.getString("score"));
					if (score != 0) {
						if (f.getScore() == 0.0) {
							f.setScore(score);
						} else {
							f.setScore((f.getScore() + score) / 2.0);
						}
					}

					// date
					if (f.getShow_time().length() <= 2) {
						f.setShow_time(rs.getString("year"));
					}

					// director
					if (rs.getString("director").indexOf(" ") != -1) {
						String[] directors = rs.getString("director").split(" ");
						for (String director : directors) {
							f.addDirectors(director);
						}
					} else {
						f.addDirectors(rs.getString("director"));
					}

					// actor
					if (rs.getString("actor").indexOf(" ") != -1) {
						String[] actors = rs.getString("actor").split(" ");
						for (String actor : actors) {
							f.addActors(actor);
						}
					} else {
						f.addActors(rs.getString("actor"));
					}

				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private void shiguang_process(String id, Film f) {
		String sql = "select * from film_info where id = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_shiguang", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					// length
					f.setDuration(Integer.parseInt(rs.getString("length")));

					// type
					if (rs.getString("type").indexOf(" / ") != -1) {
						String[] types = rs.getString("type").split(" / ");
						for (String type : types) {
							f.addTypes(type);
						}
					} else {
						f.addTypes(rs.getString("type"));
					}

					// score
					Double score = Double.parseDouble(rs.getString("ratingFinal"));
					if (score > 0) {
						if (f.getScore() != 0.0) {
							f.setScore((f.getScore() + score) / 2.0);
						} else {
							f.setScore(score);
						}
					}

					// date
					String date = rs.getString("rYear") + "-" + rs.getString("rMonth") + "-" + rs.getString("rDay");
					f.setShow_time(date);

					// actor
					String actor1 = rs.getString("actorName1");
					String actor2 = rs.getString("actorName2");
					f.addActors(actor1);
					f.addActors(actor2);

					// director
					String director = rs.getString("direcotrName");
					f.addDirectors(director);

					// description
					String description = rs.getString("commonSpecial");
					f.addDescription(description);
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private void maoyan_process(String id, Film f) {
		String sql = "select * from film_info where id = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_maoyan", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					// type
					if (rs.getString("cat").indexOf(",") != -1) {
						String[] types = rs.getString("cat").split(",");
						for (String type : types) {
							f.addTypes(type);
						}
					} else {
						f.addTypes(rs.getString("cat"));
					}

					// duration
					int duration = Integer.parseInt(rs.getString("duration"));
					if (f.getDuration() == 0) {
						f.setDuration(duration);
					}

					// director
					if (rs.getString("dir").indexOf(",") != -1) {
						String[] directors = rs.getString("dir").split(",");
						for (String director : directors) {
							f.addDirectors(director);
						}
					} else {
						f.addDirectors(rs.getString("dir"));
					}

					// actor
					if (rs.getString("star").indexOf(",") != -1) {
						String[] actors = rs.getString("star").split(",");
						for (String actor : actors) {
							f.addActors(actor);
						}
					} else {
						f.addActors(rs.getString("star"));
					}

					// score
					Double score = Double.parseDouble(rs.getString("sc"));
					if (score > 0) {
						if (f.getScore() != 0.0) {
							f.setScore((f.getScore() + score) / 2.0);
						} else {
							f.setScore(score);
						}
					}

					// date
					String date = rs.getString("rt").substring(0, rs.getString("rt").indexOf("上") - 1);
					f.setShow_time(date);
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

}
