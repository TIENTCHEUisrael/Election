import { Region } from "../component/header/header.component";

export class Participant{
    public id?: number;
    public age?: number;
    public num_cni?: string;
    public region?: Region;
    public nom?: string;
    public tel?: string;
    public login?: string;
    public pwd?: string;
    public email?: string;
    public status?: string;
    public etat?: boolean;

    public constructor(){

    }
}