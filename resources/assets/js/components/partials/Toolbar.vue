<template>
    <v-toolbar class="primary" dark>
        <v-toolbar-title>Eloquent Apps</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-text-field
            label="Search..."
            single-line
            append-icon="search"
            dark
            hide-details
        />
        <v-spacer/>
        <v-btn icon to="clients" replace="true" tag="a">
            <v-icon>person</v-icon>
        </v-btn>
    </v-toolbar>
</template>