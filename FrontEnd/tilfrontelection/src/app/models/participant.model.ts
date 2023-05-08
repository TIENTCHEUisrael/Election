
import { Region } from './region.model';

export class Participant {

    public id?: number;
    public age?: number;
    public region?: Region;
    public prenom?:string;
    public tel?:string;
    public login?:string;
    public mdp?:string;
    public statut?:string;
    public email?:string;
    public etat?:string;
    public nom?:string;

    public constructor() {
        
    }
}