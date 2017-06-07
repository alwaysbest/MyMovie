package main;

import java.util.ArrayList;

public class Main {
	public static void main(String[] args) {
		Data_Extract de = new Data_Extract();
		ArrayList<Film> films = de.film_info_extract();
		// Film_Insert fi = new Film_Insert();
		// fi.insert_film_info(films);
		ArrayList<Comment> comments = de.comment_info_extract(films);
		Film_Comment_Insert fci = new Film_Comment_Insert();
		fci.comment_insert(comments);
	}
}
