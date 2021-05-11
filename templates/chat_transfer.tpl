<!-- New Style -->
<h3 class="content-header-title mb-0 d-inline-block">Chatbox overdragen</h3>
                    <div class="breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper mr-1">
                            
                        </div>
                    </div>
                </div>
                
            </div>
				<div class="content-body">
				<section id="configuration">
					<div class="row">
                        <div class="col-12">
                            <div class="card text-white bg-blue-grey bg-darken-4">
                                <div class="card-header">
                                    <h4 class="card-title white">Wie word de nieuwe eigenaar?</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Hier kan je je chatbox overdragen aan iemand anders, het systeem let niet op spelfouten, dus controleer goed of je de nicknaam goed spelt</p>
<!-- end new -->

{literal}
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').bootstrapSwitch();
        $('input').tooltip({placement:'auto',animation:true});
        $('label').tooltip({placement:'auto',animation:true});
        $("#myTab a").click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        });
    });
</script>
{/literal}

    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Opgelet!</strong> Als je je chatbox aan iemand anders overdraagt, kan jij hier geen aanpassingen meer aan doen!
    </div>
    
    <form role="form" method="post" action="{$fullurl}/transfer">
        <input type="hidden" name="chat_id" value="{$chat_id}" />
        <div class="tab-content">
            <!-- ALGEMENE INSTELLINGEN -->
            <div class="tab-pane active fade show" id="algemeen" role="tabpanel">
                <!-- Naam van de chatbox -->
				<div class="form-group">
					<script type="text/javascript">

				function CheckSpace(event)
				{literal}{
					if(event.which ==32)
					{
						event.preventDefault();
						return false;
					}
				}{/literal}
				</script>
                        <div class="row">
                      <label class="col-sm-2 col-form-label white" for="firstname">Gebruikersnaam:</label>
						<div class="col-sm-4">
							<div class="form-group">
                            <input type="text" class="form-control" name="username" title="Gebruikersnaam naar wie de chat word overgedragen." placeholder="Gebruikersnaam" data-toggle="tooltip" data-placement="top" required>
                        </div>
                    </div>
				</div>
					

                </div>
            </div>
        </div>
        <br /><br />
        <button class="btn btn-primary" type="submit">Draag chat over</button>
    </form>
    
    

</div>
