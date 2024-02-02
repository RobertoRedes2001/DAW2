export interface Memes {
    success: boolean;
    data:    Data;
}

export interface Data {
    memes: MemeItem[];
}

export interface MemeItem {
    id:        string;
    name:      string;
    url:       string;
    width:     number;
    height:    number;
    box_count: number;
}
