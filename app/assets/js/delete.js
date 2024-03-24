//User Delete Trigger
function confirmDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}


//Setting Delete Trigger
function confirmSettingDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-setting").id.value = id;
    $("#settingDeleteModal").modal("show");
}


//Quote Delete Trigger
function confirmQuoteDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-quote").id.value = id;
    $("#quoteDeleteModal").modal("show");
}


//Category Delete Trigger
function confirmCategoryDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-category").id.value = id;
    $("#categoryDeleteModal").modal("show");
}


//Branch Delete Trigger
function confirmBranchDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-branch").id.value = id;
    $("#branchDeleteModal").modal("show");
}


//Media Delete Trigger
function confirmMediaDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-media").id.value = id;
    $("#mediaDeleteModal").modal("show");
}


//Pastor Delete Trigger
function confirmPastorDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-pastor").id.value = id;
    $("#pastorDeleteModal").modal("show");
}


//Devotional Delete Trigger
function confirmDevotionalDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-devotional").id.value = id;
    $("#devotionalDeleteModal").modal("show");
}


//Event Delete Trigger
function confirmEventDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-event").id.value = id;
    $("#eventDeleteModal").modal("show");
}