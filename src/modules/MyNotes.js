import $ from 'jquery';


class MyNotes {

    constructor() {
        this.events();
    }

    events() {
        $(".edit-note").on("click", this.editNote);
        $(".delete-note").on("click", this.deleteNote);
    }

    // Methods will go here.
    editNote(e) {
        const thisNote = $(e.target).parents("li");
        thisNote.find(".note-title-field, .note-body-field ").removeAttr("readonly").addClass("note-active-field");
        thisNote.find(".update-note").addClass("update-note--visible");
    }
    deleteNote(e) {
        const thisNote = $(e.target).parents("li");
        $.ajax({
            beforeSend: (xhr) => {
                xhr.setRequestHeader('X-WP-Nonce', universityData.nonce);
            },
            url: universityData.root_url + '/wp-json/wp/v2/note/' + thisNote.data('id'),
            type: 'DELETE',
            success: (response) => {
                thisNote.slideUp();
                console.log("Congrats");
                console.log(response);
            },
            error: (response) => {
                console.log("Sorry");
                console.log(response)
            },
        });
    }

}

export default MyNotes;