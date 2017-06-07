package main;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;

public class Data_Extract {

	private ArrayList<Comment> comments = new ArrayList<Comment>();

	public ArrayList<Film> film_info_extract() {
		Film_Name_Extract fne = new Film_Name_Extract();
		ArrayList<Film> films = fne.get_file_name();
		Film_Info_Extract fie = new Film_Info_Extract();
		fie.extract_film_info(films);
		return films;
	}

	public ArrayList<Comment> comment_info_extract(ArrayList<Film> films) {
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
		return comments;
	}

	private void douban_process(String id, Film f) {
		String sql = "select * from film_comment where subject_id = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_douban2", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					Comment c = new Comment();
					c.setId(f.getId());
					c.setUser(rs.getString("author_name"));
					c.setScore(Integer.parseInt(rs.getString("rating")) * 2);
					c.setContent(rs.getString("content"));
					c.setUseful(Integer.parseInt(rs.getString("useful_count")));
					comments.add(c);
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private void shiguang_process(String id, Film f) {
		String sql = "select * from film_comment where fid = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_shiguang", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					Comment c = new Comment();
					c.setId(f.getId());
					c.setUser(rs.getString("nickname"));
					c.setScore(Integer.parseInt(rs.getString("rating")));
					c.setContent(rs.getString("content"));
					c.setUseful(Integer.parseInt(rs.getString("reply_count")));
					comments.add(c);
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}

	private void maoyan_process(String id, Film f) {
		String sql = "select * from film_comment where fid = " + id + ";";
		DataBaseHelper dbh = new DataBaseHelper("film_maoyan", sql);
		ResultSet rs = null;
		try {
			rs = dbh.pst.executeQuery();
			if (!rs.wasNull()) {
				rs.last();
				rs.beforeFirst();
				while (rs.next()) {
					Comment c = new Comment();
					c.setId(f.getId());
					c.setUser(rs.getString("nick"));
					c.setScore((int) (Double.parseDouble(rs.getString("score")) * 2));
					c.setContent(rs.getString("content"));
					c.setUseful(Integer.parseInt(rs.getString("approve")));
					comments.add(c);
				}
			}
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
}
