import axios, { formToJSON } from "axios";
import { Accordion } from "./models";

const createSurveyForm = document.forms.createSurveyForm;
const closeBtn = createSurveyForm.querySelector('button.close-btn');
const createSurvey = document.querySelector('section.content button.create-survey');
const blurLevel = 5;
const newSurveyContainer = document.querySelector('aside section.unpublished-survey');
createSurvey.addEventListener('click', (event_) => {


    createSurveyForm.style.display = 'block';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;
    createSurveyForm.style.animation = 'show .3s ease-in-out';

    closeBtn.addEventListener('click', (event) => {
        event.preventDefault();
        createSurveyForm.elements.title.value = '';
        createSurveyForm.elements.description.value = '';
        createSurveyForm.style.display = 'none';
        document.querySelector('section.content').style.filter = 'none';
    })
})


createSurveyForm.addEventListener('submit', (event_) => {
    event_.preventDefault();

    let title = createSurveyForm.elements.title.value;
    let description = createSurveyForm.elements.description.value;
    let illustration = document.querySelector('#illustration').files[0];
    let formData = new FormData();
    
    formData.append('illustration', illustration);
    formData.append('title', title);
    formData.append('description', description);

    axios.post(
        `${window.origin}/course/store`, 
        formData
    )
    .then( ( result ) => {
        // createSurveyForm.elements.title.value = '';
        // createSurveyForm.elements.description.value = '';
        // createSurveyForm.style.display = 'none';
        // document.querySelector('section.content').style.filter = 'none';

        // let newAccordion = new Accordion(result.data.course_id, title, description);

        // newSurveyContainer.appendChild(newAccordion.htmlElement);
        // let newSurveyButton =  newAccordion.htmlElement.querySelector('button');
        
        // newSurveyButton.addEventListener('click', (event_) => {
        //     let parentElement = event_.target.parentElement;
        //     if(parentElement.classList.contains('active')){
        //         parentElement.classList.remove('active');
        //         newSurveyButton.style.borderRadius = '4px';
        //     }
        //     else {
        //         parentElement.classList.add('active');
        //         newSurveyButton.style.borderRadius = '4px 4px 0 0';
        //     }
        // })
        window.location.href = window.origin + '/course/create?course_id=' + result.data.course_id ;
        //  notification succé
    })
    .catch( ( error ) =>  {
        // notification rouge  ( indiquant les erreurs )
        console.error(error);
    })
    ;
})

