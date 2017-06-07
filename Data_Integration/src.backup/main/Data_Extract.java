package main;

import java.util.ArrayList;

public class Data_Extract {

	private ArrayList<String> film_names;

	public Data_Extract() {
		film_names = new ArrayList<String>();
	}

	public void extract() {
		Film_Name_Extract fne = new Film_Name_Extract();
		film_names = fne.get_file_name();
		this.print_film_names();
	}

	public void print_film_names() {
		for (String film_name : film_names) {
			System.out.println(film_name);
		}
	}

}
