import { BASE_DIR } from '../constants.yml'
import Sample from '@/lib/Sample';
import Jquery from 'jquery';


const sample = new Sample({
    name: 'world'
});

document.querySelector('.wrapper').addEventListener('click', () => {
    console.log(`hello, ${sample.name}. Base directory is ${BASE_DIR}.`);
});
