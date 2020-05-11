// The module 'vscode' contains the VS Code extensibility API
// Import the module and reference it with the alias vscode in your code below
import * as vscode from 'vscode';

// this method is called when your extension is activated
// your extension is activated the very first time the command is executed
export function activate(context: vscode.ExtensionContext) {

	// Use the console to output diagnostic information (console.log) and errors (console.error)
	// This line of code will only be executed once when your extension is activated
	console.log('Congratulations, your extension "gapline" is now active!');

	// The command has been defined in the package.json file
	// Now provide the implementation of the command with registerCommand
	// The commandId parameter must match the command field in package.json
	let disposable = vscode.commands.registerCommand('gapline.helloWorld', () => {
		var editor = vscode.window.activeTextEditor;
		if (!editor) {
			return;
		}

		var selection = editor.selection;
		var text = editor.document.getText(selection);
		
	    vscode.window.showInputBox({
			prompt: 'Lineas?'
		}).then(value => {
			if (value === undefined) {
			  throw new Error('cancelled');
			}
			let numberOfLines =+ value;
			var textInChunks: Array < string > = [];
			text.split('\n').forEach((currentLine: string, lineIndex) => {
				textInChunks.push(currentLine);
				if ((lineIndex + 1) % numberOfLines === 0) textInChunks.push('');
			});
			text = textInChunks.join('\n');
			if(editor === undefined){throw new Error('cancelled');}
			editor.edit((editBuilder) => {
				if(editor === undefined){throw new Error('cancelled');}
				var range = new vscode.Range(selection.start.line, 0, selection.end.line, editor.document.lineAt(selection.end.line).text.length);
				editBuilder.replace(range, text);
			});
		});
	});

	context.subscriptions.push(disposable);
}

// this method is called when your extension is deactivated
export function deactivate() {}
