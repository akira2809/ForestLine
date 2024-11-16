import { editorConfig, ClassicEditor } from 'js/mainCkeditor.js'

ClassicEditor.create(document.querySelector('#editor-des'), editorConfig);
let groupTsDay = document.getElementById('group-ts-day')
let tsDay = document.querySelectorAll('.ts-day')
let countDay = tsDay.length || 0;
function createElementCkeditor() {
    for (let i = 0; i < countDay; i++) {
        console.log(i)
        let textarea = document.createElement('textarea');
        textarea.classList.add(`editor_ts_day${i}`)
        groupTsDay.appendChild(textarea)
    }
}
function destroyElementCkeditor(index) {
    console.log(index)
}
function createEditorTSDay() {
    let classCk = ''
    for (var i = countDay; i <= countDay; i++) {
        let textarea = document.createElement('div');
        textarea.innerHTML = `
        <label for="" class="form-label">NG ÀY THỨ ${i}</label>
        <div>
            <input value="Ngày ${i++} :" />
        </div>
        <div onClick="destroyTsDay(this)">Delete</div>
        <div>
        <textarea name="editor" class="editor_ts_day${i}"></textarea>
        </div>
        `
        textarea.classList.add(`ts-day`)

        groupTsDay.appendChild(textarea)
        classCk = `.editor_ts_day${i}`
        ClassicEditor.create(document.querySelector(classCk), editorConfig);
    }
}
function getNumTSDay() {
    countDay++;
    // createElementCkeditor()
    createEditorTSDay()
}
document.getElementById('numCk').addEventListener('click', getNumTSDay)

let tsDayItem = document.querySelectorAll('.ts-day-item')
console.log(tsDayItem)