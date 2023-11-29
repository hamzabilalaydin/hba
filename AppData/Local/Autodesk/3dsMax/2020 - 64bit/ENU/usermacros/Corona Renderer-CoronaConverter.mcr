macroScript CoronaConverter
			category:"Corona Renderer" buttonText:"Corona Converter" tooltip:"Corona Mtl/Lights converter" (
			local scriptDirectory = (GetDir #scripts) + "\\CoronaRenderer"
			local scriptFiles = getfiles (scriptDirectory + "\\CoronaConverter_v*.ms")
			if scriptFiles.count > 0 then (
				sort scriptFiles
				local latestFile = scriptFiles[scriptFiles.count]
				filein latestFile
			) else (
				messageBox (@"No CoronaConverter script file found in " + scriptDirectory) title:"Error"
			)
		)
