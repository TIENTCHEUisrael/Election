import { Bulletin } from "./bulletinModel";
import { Participant } from "./participantModel";

export class Vote{
    public id?: number;
    public date?: string;
    public participant?: Participant;
    public bulletin?: Bulletin;

    public constructor(){
        
    }
}