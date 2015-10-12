package br.com.thiengo.retrofitexample.domain;

/**
 * Created by viniciusthiengo on 10/12/15.
 */
public class WrapRequest {
    private String method;
    private Car car;


    public WrapRequest() {}
    public WrapRequest(String method, Car car) {
        this.method = method;
        this.car = car;
    }


    public String getMethod() {
        return method;
    }

    public void setMethod(String method) {
        this.method = method;
    }

    public Car getCar() {
        return car;
    }

    public void setCar(Car car) {
        this.car = car;
    }
}
