import { Routes } from '@angular/router';
import { HomeComponent } from './home/home/home.component';

export const ROUTES: Routes = [
    {path:'', pathMatch:'full',redirectTo: 'home'},
    {path:'**', pathMatch:'full', redirectTo:'home'},
    {path: 'home', component: HomeComponent}
];