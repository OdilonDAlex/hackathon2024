import axios from "axios";

const createItemForm = document.querySelector('form.create-item-popup');
const closeBtn = createItemForm.querySelector('button.close-btn');
const createItem = document.querySelector('section.content button.create-survey-item');
const blurLevel = 5;
const newAnswerButton = createItemForm.querySelector('button.new-answers');
const answerType =  createItemForm.elements.type;
const sectionContent = document.querySelector('section.content');

createItem.addEventListener('click', (event_) => {

    sectionContent.addEventListener('hover', (e) => {
        console.log('hover');
    })

    createItemForm.style.display = 'block';
    createItemForm.style.animation = 'show .3s ease-in-out';
    document.querySelector('section.content').style.filter = `blur(${blurLevel}px) brightness(.5) grayscale(10)`;

    closeBtn.addEventListener('click', (event) => {
        event.preventDefault();
        createItemForm.style.display = 'none';
        document.querySelector('section.content').style.filter = 'blur(0px)';
    })
})

createItemForm.addEventListener('submit', (event_) => {
    event_.preventDefault();

    let courseId = createItemForm.elements.courseId.value;
    let name = createItemForm.elements.name.value;
    let description = createItemForm.elements.description.value;
    let support;
    try{
        support = createItemForm.querySelector('input[type="file"]').files[0]
    }
    catch(e){;}

    let formData = new FormData();

    formData.append('courseId', courseId);
    formData.append('name', name);
    formData.append('description', description);
    
    if(support){
        formData.append('support', support);
    }

    console.log([...formData.entries()]);
    axios.post(`${window.origin}/course/storeItem`, formData)
    .then((result) => {
        // createItemForm.elements.name.value = "";
        // createItemForm.elements.description.value = "";
        // createItemForm.querySelector('input[type="file"]').files = [];
        createItemForm.style.display = 'none';
        window.location.reload();
    })
    .catch((e) => {
        console.error(e);
    })
})
