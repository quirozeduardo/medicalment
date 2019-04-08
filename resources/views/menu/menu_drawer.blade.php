<v-list>
    <v-list-tile href="{{route('home')}}">
        <v-list-tile-action>
            <v-icon>home</v-icon>
        </v-list-tile-action>
        <v-list-tile-title>Home</v-list-tile-title>
    </v-list-tile>

    <v-list-group prepend-icon="account_circle">
        <template v-slot:activator>
            <v-list-tile>
                <v-list-tile-title>Control de Usuarios</v-list-tile-title>
            </v-list-tile>
        </template>
        <v-list-tile href="{{route('home')}}">
            <v-list-tile-action>
                <v-icon>account_circle</v-icon>
            </v-list-tile-action>
            <v-list-tile-title>Home</v-list-tile-title>
        </v-list-tile>
    </v-list-group>
</v-list>
