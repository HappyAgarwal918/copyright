var policyWizardStep = 1,
        policyWizardStepKey = "general";

function policyBuilderGeneral(i) {
    "platforms" == i &&
        ($("#input_edit_wizard_platforms_source_online_yes").prop("checked") 
        	? $("#control_edit_wizard_website_url").show() 
        	: $("#control_edit_wizard_website_url").hide(),
        $("#input_edit_wizard_platforms_source_online_no").prop("checked") 
        	? $("#control_edit_wizard_website_name").show() 
        	: $("#control_edit_wizard_website_name").hide());

    "formpage2" == i &&
        ($("#input_edit_wizard_first_publication_1").prop("checked") 
        	? $("#control_edit_wizard_first_publication_date").show() && $("#control_edit_wizard_first_publication_country").show()
        	: $("#control_edit_wizard_first_publication_date").hide() && $("#control_edit_wizard_first_publication_country").hide());

    "formpage3" == i &&
        ($("#input_edit_wizard_derivative_1").prop("checked") 
            ? $("#control_edit_wizard_derivative_old").show() && $("#control_edit_wizard_derivative_new").show()
            : $("#control_edit_wizard_derivative_old").hide() && $("#control_edit_wizard_derivative_new").hide());

    "formpage3-1" == i &&
        ($("#input_edit_wizard_compilation_1").prop("checked") 
            ? $("#control_edit_wizard_compilation_data").show()
            : $("#control_edit_wizard_compilation_data").hide());

    "formpage4" == i &&
        ($("#input_edit_wizard_self_author_0").prop("checked") 
            ? $("#control_edit_wizard_self_author_action").show()
            : $("#control_edit_wizard_self_author_action").hide());

    "websitefile" == i &&
        ($("#input_edit_wizard_method_file").prop("checked") 
        	? $("#control_edit_wizard_method_file").show() && $("#control_edit_wizard_captcha").show()
        	: $("#control_edit_wizard_method_file").hide());
        ($("#input_edit_wizard_method_tag").prop("checked") 
        	? $("#control_edit_wizard_method_tag").show() && $("#control_edit_wizard_captcha").show()
        	: $("#control_edit_wizard_method_tag").hide());

    "author" == i &&
        ($("#input_edit_wizard_known_1").prop("checked") 
            ? $("#control_edit_wizard_creator_type").show()
            : $("#control_edit_wizard_creator_type").hide());

    "author1" == i &&
        ($("#input_edit_wizard_creator_type_person").prop("checked") 
            ? $("#control_edit_wizard_fname").show() && 
              $("#control_edit_wizard_mname").show() &&
              $("#control_edit_wizard_lname").show() &&
              $("#control_edit_wizard_country").show() &&
              $("#control_edit_wizard_state").show() &&
              $("#control_edit_wizard_city").show() &&
              $("#control_edit_wizard_address").show() &&
              $("#control_edit_wizard_zip").show() &&
              $("#control_edit_wizard_nickname").show() &&
              $("#control_edit_wizard_hired").show()
            : $("#control_edit_wizard_fname").hide() && 
              $("#control_edit_wizard_mname").hide() &&
              $("#control_edit_wizard_lname").hide() &&
              $("#control_edit_wizard_nickname").hide(),
        $("#input_edit_wizard_creator_type_company").prop("checked") 
            ? $("#control_edit_wizard_company").show() &&
              $("#control_edit_wizard_country").show() &&
              $("#control_edit_wizard_state").show() &&
              $("#control_edit_wizard_city").show() &&
              $("#control_edit_wizard_address").show() &&
              $("#control_edit_wizard_zip").show() &&
              $("#control_edit_wizard_hired").show()
            : $("#control_edit_wizard_company").hide());

    "author1-1" == i &&
        ($("#input_edit_wizard_nickname_1").prop("checked") 
            ? $("#control_edit_wizard_pseudonym").show()
            : $("#control_edit_wizard_pseudonym").hide());

    "owner" == i &&
        ($("#input_edit_wizard_self_owner_0").prop("checked") 
            ? $("#control_edit_wizard_self_owner_action").show()
            : $("#control_edit_wizard_self_owner_action").hide());

    "owner1" == i &&
        ($("#input_edit_wizard_statement_0").prop("checked") 
            ? $("#control_edit_wizard_statement_data").show()
            : $("#control_edit_wizard_statement_data").hide());

    "files" == i &&
        ($("#input_edit_wizard_upload_files_now_1").prop("checked") 
            ? $("#control_edit_wizard_upload_files_now_action").show()
            : $("#control_edit_wizard_upload_files_now_action").hide());
}
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_platforms input.radio").click(function () { policyBuilderGeneral("platforms"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_first_publication input.radio").click(function () { policyBuilderGeneral("formpage2"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_derivative input.radio").click(function () { policyBuilderGeneral("formpage3"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_compilation input.radio").click(function () { policyBuilderGeneral("formpage3-1"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_self_author input.radio").click(function () { policyBuilderGeneral("formpage4"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_method input.radio").click(function () { policyBuilderGeneral("websitefile"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_known input.radio").click(function () { policyBuilderGeneral("author"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_creator_type input.radio").click(function () { policyBuilderGeneral("author1"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_nickname input.radio").click(function () { policyBuilderGeneral("author1-1"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_self_owner input.radio").click(function () { policyBuilderGeneral("owner"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_statement input.radio").click(function () { policyBuilderGeneral("owner1"); })) 
        : "operator" == policyWizardStepKey;
});
$(function () {
    "general" == policyWizardStepKey
        ? ($("#control_edit_wizard_upload_files_now input.radio").click(function () { policyBuilderGeneral("files"); })) 
        : "operator" == policyWizardStepKey;
});

/* Add location */
function addTargetLocation()
{
	var html = '<div class="col-sm-6"><input class="form-control form_font" id="input_edit_takedown_target[]" placeholder="e.g. https://www.thief.com/stolen-article.html" maxlength="255" type="text" name="target[]" value=""><span class="help"><a href="#" onclick="removeTargetLocation(this);return false;">Remove location</a></span></div>';

	$('#control_edit_takedown_target').append(html);

	if ( $('#control_edit_takedown_target input').length >= 25 )
	{
		$('#control_edit_takedown_add_target_location').hide();
	}
}

/* Remove location */
function removeTargetLocation(obj)
{
	$(obj).parent().parent().remove();

	if ( $('#control_edit_takedown_target input').length < 25 )
	{
		$('#control_edit_takedown_add_target_location').show();
	}
}

$(function() {
    // websites
    $("input[name='method']").click(function() {
      ($("#method1").is(":checked")) ? $(".method1-1").removeClass("hidden"): $(".method1-1").addClass("hidden")
    });
    // takedown
    $("input[name='source_online']").click(function() {
      ($("#source_online1").is(":checked")) ? $(".source_online1-1").removeClass("hidden"): $(".source_online1-1").addClass("hidden")
    });
    $("input[name='source_online']").click(function() {
      ($("#source_online2").is(":checked")) ? $(".source_online2-1").removeClass("hidden"): $(".source_online2-1").addClass("hidden")
    });
    // work
    $("input[name='first_publication']").click(function() {
      ($("#first_publication1").is(":checked")) ? $(".first_publication1-1").removeClass("hidden"): $(".first_publication1-1").addClass("hidden")
    });
    $("input[name='derivative']").click(function() {
      ($("#derivative1").is(":checked")) ? $(".derivative1-1").removeClass("hidden"): $(".derivative1-1").addClass("hidden")
    });
    $("input[name='compilation']").click(function() {
      ($("#compilation1").is(":checked")) ? $(".compilation1-1").removeClass("hidden"): $(".compilation1-1").addClass("hidden")
    });
    $("input[name='self_author']").click(function() {
      ($("#self_author2").is(":checked")) ? $(".self_author2-1").removeClass("hidden"): $(".self_author2-1").addClass("hidden")
    });
    $("input[name='self_owner']").click(function() {
      ($("#self_owner2").is(":checked")) ? $(".self_owner2-1").removeClass("hidden"): $(".self_owner2-1").addClass("hidden")
    });
    $("input[name='upload_files_now']").click(function() {
      ($("#upload_files_now1").is(":checked")) ? $(".upload_files_now2-1").removeClass("hidden"): $(".upload_files_now2-1").addClass("hidden")
    });

    // author
    $("input[name='known']").click(function() {
      ($("#known1").is(":checked")) ? $(".known1-1").removeClass("hidden"): $(".known1-1").addClass("hidden")
    });
    $("input[name='creator_type']").click(function() {
      ($("#creator_type1").is(":checked")) ? $(".creator_type1-1").removeClass("hidden"): $(".creator_type1-1").addClass("hidden")
    });
    $("input[name='creator_type']").click(function() {
      ($("#creator_type2").is(":checked")) ? $(".creator_type2-1").removeClass("hidden"): $(".creator_type2-1").addClass("hidden")
    });
    $("input[name='creator_type']").click(function() {
      ($(".creator_type").is(":checked")) ? $(".creator_type-1").removeClass("hidden"): $(".creator_type-1").addClass("hidden")
    });
    $("input[name='nickname']").click(function() {
      ($("#nickname1").is(":checked")) ? $(".nickname1-1").removeClass("hidden"): $(".nickname1-1").addClass("hidden")
    });
    $("input[name='creator_type']").click(function() {
      ($("#creator_type2").is(":checked")) ? $(".nickname1-1").addClass("hidden") : $("").show()
    });
    $("input[name='known']").click(function() {
      ($("#known2").is(":checked")) ? $(".creator_type1-1").addClass("hidden") : $("").show()
    });
    $("input[name='known']").click(function() {
      ($("#known2").is(":checked")) ? $(".creator_type2-1").addClass("hidden") : $("").show()
    });
    $("input[name='known']").click(function() {
      ($("#known2").is(":checked")) ? $(".creator_type-1").addClass("hidden") : $("").show()
    });
    $("input[name='known']").click(function() {
      ($("#known2").is(":checked")) ? $(".nickname1-1").addClass("hidden") : $("").show()
    });
    $("input[name='statement']").click(function() {
      ($("#statement3").is(":checked")) ? $(".statement3-1").removeClass("hidden"): $(".statement3-1").addClass("hidden")
    });
});