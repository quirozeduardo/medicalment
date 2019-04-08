<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>

</head>
<body>
<div id="app">
    <v-app>
        <v-navigation-drawer fixed
                             clipped
                             class="grey lighten-4"
                             app
                             width="230"
                             v-model="drawer">
            @include('menu.menu_drawer')
        </v-navigation-drawer>
        <v-toolbar color="cyan" app absolute clipped-left>
            <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
            <span class="title ml-3 mr-5">{{ config('app.name') }}</span>
            <v-text-field
                solo-inverted
                flat
                label="Search"
                prepend-icon="search"
            ></v-text-field>
            <v-spacer></v-spacer>
        </v-toolbar>
        <v-content>
      <v-container fluid fill-height>
        <v-layout justify-center align-center>
          <v-flex shrink>
            <v-tooltip right>
              <v-btn
                icon
                large
                :href="source"
                target="_blank"
                slot="activator"
              >
                <v-icon large>code</v-icon>
              </v-btn>
              <span>Source</span>
            </v-tooltip>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
    </v-app>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
