@extends('/include/layout')
@section('title','Verify_ARUCVS')
@section('style')
{{asset('css/verifystyle.css')}}
@endsection
@section('content')
<div class="container">
    <h1>Graduate Credential Verification System</h1>
    <form>
      <label for="schoolName">Student first Name:</label>
      <input type="text" id="schoolName" name="schoolName" required>

      <label for="schoolName"> last Name:</label>
      <input type="text" id="schoolName" name="schoolName" required>
      
      <label for="graduateName">Graduate year:</label>
      <input type="number" id="graduateName" name="graduateName" required>
      
      <label for="credentialType">Credential Type:</label>
      <select id="credentialType" name="credentialType">
        <option value="degree">Degree</option>
        <option value="certificate">Certificate</option>
        <option value="diploma">Diploma</option>
      </select>
      
      <button type="submit">Verify</button>
    </form>
  </div>
@endsection