package br.com.thiengo.retrofitexample.util;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;

import java.io.ByteArrayOutputStream;

/**
 * Created by viniciusthiengo on 10/12/15.
 */
public class BinaryBytes {

    public static byte[] getResourceInBytes( Context context, int resource ){
        final Bitmap img = BitmapFactory.decodeResource( context.getResources(), resource );
        ByteArrayOutputStream stream = new ByteArrayOutputStream();
        img.compress(Bitmap.CompressFormat.PNG, 100, stream);
        byte[] byteArray = stream.toByteArray();

        return( byteArray );
    }

    public static String getResourceName( Context context, int resource ){
        return( context.getResources().getResourceEntryName(resource) );
    }
}
