package br.com.thiengo.retrofitexample.domain;

/**
 * Created by viniciusthiengo on 10/11/15.
 */
public class Engine {
    private int horses;
    private int year;
    private String strength;

    public Engine(){}

    public Engine( int horses, int year, String strength ){
        this.horses = horses;
        this.year = year;
        this.strength = strength;
    }


    public int getHorses() {
        return horses;
    }

    public void setHorses(int horses) {
        this.horses = horses;
    }

    public int getYear() {
        return year;
    }

    public void setYear(int year) {
        this.year = year;
    }

    public String getStrength() {
        return strength;
    }

    public void setStrength(String strength) {
        this.strength = strength;
    }
}
