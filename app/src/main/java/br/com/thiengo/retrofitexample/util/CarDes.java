package br.com.thiengo.retrofitexample.util;

import com.google.gson.Gson;
import com.google.gson.JsonDeserializationContext;
import com.google.gson.JsonDeserializer;
import com.google.gson.JsonElement;
import com.google.gson.JsonParseException;

import java.lang.reflect.Type;

import br.com.thiengo.retrofitexample.domain.Car;

/**
 * Created by viniciusthiengo on 10/12/15.
 */
public class CarDes implements JsonDeserializer<Object> {
    @Override
    public Object deserialize(JsonElement json, Type typeOfT, JsonDeserializationContext context) throws JsonParseException {
        JsonElement car = json.getAsJsonObject();

        if( json.getAsJsonObject().get("car") != null ){
            car = json.getAsJsonObject().get("car");
        }

        return ( new Gson().fromJson( car, Car.class ));
    }
}
