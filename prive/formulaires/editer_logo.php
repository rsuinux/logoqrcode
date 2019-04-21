#CACHE{0}
[(#CONFIG{activer_logos}|=={oui}|oui)<div class='formulaire_spip formulaire_editer formulaire_editer_logo formulaire_editer_logo_#ENV{objet}'>
	[<h3 class="titrem">(#ENV{_options}|table_valeur{titre})</h3>]
	[<p class="reponse_formulaire reponse_formulaire_ok">(#ENV*{message_ok})</p>]
	[<p class="reponse_formulaire reponse_formulaire_erreur">(#ENV*{message_erreur})</p>]
	[(#ENV{editable})
	#SET{valider,#ENV{valider,''}}
	<form method='post' action='#ENV{action}' enctype='multipart/form-data'><div>
		[(#REM) declarer les hidden qui declencheront le service du formulaire 
		parametre : url d'action ]
		#ACTION_FORMULAIRE
		[(#REM) un submit pour attraper la touche entree]
		<div style="display:none;"><input type='submit' class='submit' value='<:bouton_upload:>' /></div>
	]
		<div class="editer-groupe">
			<div class="editer editer_logo_on[ (#ENV{logo_on}|non)logo_upload][ (#ENV**{erreurs}|table_valeur{logo_on}|oui)erreur]">
				[(#ENV{logo_on}|oui)
					[(#INCLURE{fond=formulaires/inc-apercu-logo,env,logo=#ENV{logo_on},quoi=logo_on,editable=#ENV{logo_off}|non|et{#ENV{editable}}})]
				][(#ENV{editable})
					[(#ENV{logo_on}|non)
						<label for="logo_on_#ENV{objet}_#ENV{id_objet}">[(#ENV{_options}|table_valeur{label}|sinon{<:info_telecharger_nouveau_logo:>})]</label>[
						<span class='erreur_message'>(#ENV**{erreurs}|table_valeur{logo_on})</span>
						]<input type='file' class='file' name='logo_on' size="[(#ENV{_options}|table_valeur{size_input}|sinon{12})]" id='logo_on_#ENV{objet}_#ENV{id_objet}' value="" />
						#SET{valider,' '}
					]
				]
			</div>
			[(#ENV{logo_survol}|ou{#ENV{logo_off}}|oui)
			<div class="editer editer_logo_off[ (#ENV{logo_off}|non)logo_upload][(#ENV{_show_upload_off}|oui)open][ (#ENV**{erreurs}|table_valeur{logo_off}|oui)erreur]">
				[(#ENV{logo_off}|oui)
					[(#INCLURE{fond=formulaires/inc-apercu-logo,env,logo=#ENV{logo_off},quoi=logo_off,editable=#ENV{editable}})]
				][(#ENV{editable})
					[(#ENV{logo_off}|non)
						<div [(#ENV**{erreurs}|table_valeur{logo_off}|non)
							class="ajouter_survol"><a href="#" onclick="jQuery(this).parent().siblings().show().parent().addClass('open').parents('form').find('.boutons').show();return false;"><:logo_survol:></a></div>
						<div [(#ENV{_show_upload_off}|non)style="display:none;" #SET{hide,' '}]]>
						<label for="logo_off"><:info_telecharger_nouveau_logo:></label>[
						<span class='erreur_message'>(#ENV**{erreurs}|table_valeur{logo_off})</span>
						]<input type='file' class='file' name='logo_off' size="[(#ENV{_options}|table_valeur{size_input}|sinon{12})]" id='logo_off_#ENV{objet}_#ENV{id_objet}' value="" />
						#SET{valider,' '}
						</div>
					]
				]
			</div>
			]
		</div>
		[(#REM) ajouter les saisies supplementaires : extra et autre, a cet endroit ]
		<!--extra-->
	[(#ENV{editable})
		[(#GET{valider})
		<p class="boutons"[(#GET{hide})style='display:none;']><input type='submit' class='submit' value='<:bouton_upload:>' /></p>
		]
	</div></form>
	]
</div>
]