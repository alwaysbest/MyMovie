package main;

public class Comment {
	private int id;
	private String user;
	private String content;
	private int score;
	private int useful;

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	public String getUser() {
		return user;
	}

	public void setUser(String user) {
		this.user = user;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public int getScore() {
		return score;
	}

	public void setScore(int score) {
		this.score = score;
	}

	public int getUseful() {
		return useful;
	}

	public void setUseful(int useful) {
		this.useful = useful;
	}
}
