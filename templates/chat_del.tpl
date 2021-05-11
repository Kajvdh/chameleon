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

    <form role="form" method="post" action="{$fullurl}/del">
        <input type='hidden' name='chat_id' value='{$chat_id}' />
        <div class='alert alert-warning alert-dismissable'>
            <h4>Weet je zeker dat je deze chatbox wil verwijderen?</h4>
		</div>
            <p>
            Naam van de chat: <b>{$chat_name}</b><br />
            {if isset($god)}Eigenaar van de chat: <b>{$chat_owner}</b><br />{/if}<br />
            </p>
            
            <button class='btn btn-danger' type='submit'>Ja, verwijder deze chatbox</button>
            <a href="{$fullurl}/list" class='btn btn-primary'>Nee</a>
        
        
        
    </form>
</div>
</div>
