import { Region } from "./region.model";

 export class Participant{
    public id: number;
    public nom: string;
    public telephone: string;
    public login: string;
    public password: string;
    public email: string;
    public etat: boolean;
    public cni_number: string;
    public age: number;
    public sexe: string;
    public statut: string;
    public region: Region;

    constructor(
         id: number,
         nom: string,
         telephone: string,
         login: string,
         password: string,
         email: string,
         etat: boolean,
         cni_number: string,
         age: number,
         sexe: string,
         statut: string,
         region: Region,
    ){
        this.id = id;
        this.nom = nom;
        this.telephone = telephone;
        this.login = login;
        this.password = password;
        this.email = email;
        this.etat = etat;
        this.cni_number = cni_number;
        this.age = age;
        this.sexe = sexe;
        this.statut = statut;
        this.region = region;
    }
}
