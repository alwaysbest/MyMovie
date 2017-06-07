package main;

import java.util.ArrayList;

public class Film {
	
	private ArrayList<String> pre_ids;

	private int id;

	private String name;

	private double score;

	private ArrayList<String> types;

	private int duration;

	private ArrayList<String> directors;

	private ArrayList<String> actors;

	private String show_time;

	private String description;

	public Film(int id) {
		this.pre_ids = new ArrayList<String>();
		this.id = id;
		this.name = "";
		this.score = 0.0;
		this.types = new ArrayList<String>();
		this.duration = 0;
		this.directors = new ArrayList<String>();
		this.actors = new ArrayList<String>();
		this.show_time = "";
		this.description = "";
	}
	
	public void addPreid(String pid) {
		this.pre_ids.add(pid);
	}
	
	public ArrayList<String> getPid(){
		return pre_ids;
	}

	public int getId() {
		return id;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public double getScore() {
		return score;
	}

	public void setScore(double score) {
		this.score = score;
	}

	public ArrayList<String> getTypes() {
		return types;
	}

	public void addTypes(String type) {
		if (!this.types.contains(type)) {
			this.types.add(type);
		}
	}

	public int getDuration() {
		return duration;
	}

	public void setDuration(int duration) {
		this.duration = duration;
	}

	public ArrayList<String> getDirectors() {
		return directors;
	}

	public void addDirectors(String director) {
		if (!this.directors.contains(director)) {
			this.directors.add(director);
		}
	}

	public ArrayList<String> getActors() {
		return actors;
	}

	public void addActors(String actor) {
		if (!this.actors.contains(actor)) {
			this.actors.add(actor);
		}
	}

	public String getShow_time() {
		return show_time;
	}

	public void setShow_time(String show_time) {
		this.show_time = show_time;
	}

	public String getDescription() {
		return description;
	}

	public void addDescription(String new_description) {
		this.description += new_description;
	}

}
