import { Bulletin } from "./bulletin.model";
import { Election } from "./election.model";
import { Participant } from "./participant.model";

export class Vote{
    public id: number;
    public date: Date;
    public participant: Participant;
    public bulletin: Bulletin;
    public election: Election;


    constructor(
         id: number,
         date: Date,
         participant: Participant,
         bulletin: Bulletin,
         election: Election,
    ){
        this.id = id;
        this.date = date;
        this.participant = participant;
        this.bulletin = bulletin;
        this.election = election;
    }
}

