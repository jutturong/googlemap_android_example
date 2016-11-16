package com.example.linux.myapplication;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.location.Geocoder;
import android.location.LocationManager;
import android.os.AsyncTask;
import android.provider.Settings;
import android.support.v4.app.FragmentActivity;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.util.Log;
import android.view.View;
import android.widget.RadioButton;
import android.widget.Toast;

import com.google.android.gms.identity.intents.Address;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.StatusLine;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Locale;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;

    // Latitude & Longitude
//@16.461336,102.8381056
    private Double Latitude  = 16.461336;
    private Double Longitude  = 102.8381056;



    //@16.7399587,101.5715252
//16.5055501,102.867364
    private Double Latitude2  = 16.5055501;
    private Double Longitude2  = 102.867364;


    // RadioButton
    RadioButton rdoNormal, rdoHybrid, rdoSatellite, rdoTerrain;

   // ArrayList<HashMap<String, String>> location = new ArrayList<HashMap<String, String>>();
   // HashMap<String, String> map;

    //http://kkucleft.kku.ac.th/app_admin/index.php/welcome/json_location

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }


    /**
     * Manipulates the map once available.
     * This callback is triggered when the map is ready to be used.
     * This is where we can add markers or lines, add listeners or move the camera. In this case,
     * we just add a marker near Sydney, Australia.
     * If Google Play services is not installed on the device, the user will be prompted to install
     * it inside the SupportMapFragment. This method will only be triggered once the user has
     * installed Google Play services and returned to the app.
     */
    @Override
    public void onMapReady(GoogleMap googleMap) {

        mMap = googleMap;

        // Add a marker in Sydney and move the camera
        LatLng sydney = new LatLng( Latitude , Longitude );

        Marker TP = googleMap.addMarker(new MarkerOptions()
                .position(sydney).title("แสดงตำแหน่งการปักหมุด"));

        mMap.addMarker(new MarkerOptions().position(sydney).title("Marker in Sydney"));
        mMap.moveCamera(CameraUpdateFactory.newLatLng(sydney));


        MarkerOptions marker = new MarkerOptions().position(new LatLng(Latitude2, Longitude2)).title("Hello Maps2 ");
        mMap.addMarker(marker);
        marker.icon(BitmapDescriptorFactory.defaultMarker(BitmapDescriptorFactory.HUE_VIOLET));


        mMap.getUiSettings().setZoomGesturesEnabled(true);

        /*
        final LatLng TutorialsPoint = new LatLng(21 , 57);
        Marker TP = googleMap.addMarker(new MarkerOptions()
                .position(TutorialsPoint).title("TutorialsPoint"));
         */



        //*** Focus & Zoom
        mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_HYBRID);
        mMap.animateCamera(CameraUpdateFactory.newLatLngZoom( sydney  , 17));


         //Channing Map Type
        mMap.setMapType(GoogleMap.MAP_TYPE_NORMAL);
        mMap.setMapType(GoogleMap.MAP_TYPE_HYBRID);
      //  mMap.setMapType(GoogleMap.MAP_TYPE_SATELLITE);
      //  mMap.setMapType(GoogleMap.MAP_TYPE_TERRAIN);

        mMap.getUiSettings().setZoomGesturesEnabled(true);

       // mMap.setMapType(GoogleMap.MAP_TYPE_NONE);

        mMap.getUiSettings().setRotateGesturesEnabled(true);
        //Compass Functionality
        mMap.getUiSettings().setCompassEnabled(true);
        //My Location Button
        mMap.getUiSettings().setMyLocationButtonEnabled(true);

        mMap.getUiSettings().setRotateGesturesEnabled(true);



        //*** Zoom Control
        mMap.getUiSettings().setRotateGesturesEnabled(true);

        //*** RadioButton
        rdoNormal = (RadioButton)findViewById(R.id.rdoNormal);







        //---------Check Enabled Location Services  เป็นการ check การเปิด location server GPS-------
        final AlertDialog.Builder adb = new AlertDialog.Builder(this);
        LocationManager lm = (LocationManager) this.getSystemService(Context.LOCATION_SERVICE);
        boolean isGPS_Enabled = false;
        boolean isNetwork_Enabled = false;

        try {
            isGPS_Enabled = lm.isProviderEnabled(LocationManager.GPS_PROVIDER);
        } catch (Exception ex) { }

        try {
            isNetwork_Enabled = lm.isProviderEnabled(LocationManager.NETWORK_PROVIDER);
        } catch (Exception ex) { }

        if (!isGPS_Enabled && !isNetwork_Enabled) {

            adb.setTitle("Warning Location Services!!");
            adb.setMessage("Please Enable Location Services.");
            adb.setNegativeButton("Cancel", null);
            adb.setPositiveButton("Ok", new AlertDialog.OnClickListener() {
                public void onClick(DialogInterface dialog, int arg1) {
                    // TODO Auto-generated method stub
                    Intent myIntent = new Intent(Settings.ACTION_LOCATION_SOURCE_SETTINGS);
                    startActivity(myIntent);
                }
            });
            adb.show();

        }


/*

        ArrayList<HashMap<String, String>> location = null;
        String url = "http://kkucleft.kku.ac.th/app_admin/index.php/welcome/json_location";
        try {

            JSONArray data = new JSONArray(getHttpGet(url));

            location = new ArrayList<HashMap<String, String>>();
            HashMap<String, String> map;

            Toast.makeText(MapsActivity.this,String.valueOf(  data.length()  ),Toast.LENGTH_SHORT).show();



            for(int i = 0; i < data.length(); i++){
                JSONObject c = data.getJSONObject(i);

                map = new HashMap<String, String>();
                map.put("LocationID", c.getString("LocationID"));
                map.put("Latitude", c.getString("Latitude"));
                map.put("Longitude", c.getString("Longitude"));
                map.put("LocationName", c.getString("LocationName"));
                location.add(map);

                Toast.makeText(MapsActivity.this,String.valueOf( c.getString("LocationName") ),Toast.LENGTH_SHORT).show();

            }







        } catch (JSONException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

*/




    }




    RadioButton.OnClickListener myOptionOnClickListener = new RadioButton.OnClickListener()
    {
        public void onClick(View v)
        {

            // TODO Auto-generated method stub
            if(rdoNormal.isChecked())
            {
                mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_NORMAL);
            }else if(rdoHybrid.isChecked())
            {
                mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_HYBRID);
            }else if(rdoSatellite.isChecked())
            {
                mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_SATELLITE);
            }else if(rdoTerrain.isChecked())
            {
                mMap.setMapType(com.google.android.gms.maps.GoogleMap.MAP_TYPE_TERRAIN);
            }


        }
    };



    public static String getHttpGet(String url) {
        StringBuilder str = new StringBuilder();
        HttpClient client = new DefaultHttpClient();
        HttpGet httpGet = new HttpGet(url);
        try {
            HttpResponse response = client.execute(httpGet);
            StatusLine statusLine = response.getStatusLine();
            int statusCode = statusLine.getStatusCode();
            if (statusCode == 200) { // Download OK
                HttpEntity entity = response.getEntity();
                InputStream content = entity.getContent();
                BufferedReader reader = new BufferedReader(new InputStreamReader(content));
                String line;
                while ((line = reader.readLine()) != null) {
                    str.append(line);
                }
            } else {
                Log.e("Log", "Failed to download result..");
            }
        } catch (ClientProtocolException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
        return str.toString();
    }







}
