package br.com.thiengo.retrofitexample.api;

import com.squareup.okhttp.RequestBody;

import java.util.List;

import br.com.thiengo.retrofitexample.domain.Car;
import br.com.thiengo.retrofitexample.domain.WrapRequest;
import retrofit.Call;
import retrofit.http.Body;
import retrofit.http.Field;
import retrofit.http.FormUrlEncoded;
import retrofit.http.GET;
import retrofit.http.Header;
import retrofit.http.Multipart;
import retrofit.http.POST;
import retrofit.http.Part;
import retrofit.http.Path;

/**
 * Created by viniciusthiengo on 10/12/15.
 */
public interface CarAPI {
    @GET("package/ctrl/{ctrlCar}")
    Call<Car> getLuxuryCar( @Path("ctrlCar") String ctrl);


    @FormUrlEncoded
    @POST("package/ctrl/CtrlCar.php")
    Call<Car> getOneCar( @Field("method") String method);


    @FormUrlEncoded
    @POST("package/ctrl/CtrlCar.php")
    Call<List<Car>> getManyCars( @Field("method") String method);


    @POST("package/ctrl/CtrlCar.php")
    Call<Car> saveCar( @Body WrapRequest wrapRequest);


    @Multipart
    @POST("package/ctrl/CtrlCar.php")
    Call<Car> sendImg( @Part("method") String method, @Part("name_image") String imageName, @Part("binary_image") RequestBody requestBody);

    @FormUrlEncoded
    @POST("package/ctrl/CtrlCar.php")
    Call<Car> sendHeader( @Header("mega-test") String megaTest, @Field("method") String method);

    @FormUrlEncoded
    @POST("package/ctrl/CtrlCar.php")
    Call<Car> saveCars( @Field("method") String method, @Field("cars") String carsJson);
}
