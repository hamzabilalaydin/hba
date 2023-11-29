macroScript CoronaProxyExporter
			category:"Corona Renderer" buttonText:"Corona Proxy Exporter" tooltip:"Corona Proxy Exporter" (
			local scriptDirectory = (GetDir #scripts) + "\\CoronaRenderer"
			local scriptFiles = getfiles (scriptDirectory + "\\coronaProxyExporter_v*.ms")
			if scriptFiles.count > 0 then (
				sort scriptFiles
				local latestFile = scriptFiles[scriptFiles.count]
				filein latestFile
			) else (
				messageBox (@"No CoronaProxyExporter script file found in " + scriptDirectory) title:"Error"
			)
		)
