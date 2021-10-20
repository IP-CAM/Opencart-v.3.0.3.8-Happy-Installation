<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/report/customer_transaction_info.twig */
class __TwigTemplate_a54e512381fcf6576a4892cba5a283a93d7d56f7228ef2a8ad813ce0ce6b5e34 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 5
        echo ($context["text_filter"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-start\">";
        // line 9
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 11
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-start\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-customer\">";
        // line 17
        echo ($context["entry_customer"] ?? null);
        echo "</label>
          <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 18
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
          <label class=\"control-label\" for=\"input-date-end\">";
        // line 21
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 23
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-end\" class=\"form-control\" />
            <span class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
            </span></div>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 29
        echo ($context["button_filter"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-bar-chart\"></i> ";
        // line 37
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 44
        echo ($context["column_customer"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 45
        echo ($context["column_email"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 46
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 47
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 48
        echo ($context["column_total"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 49
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 54
        if (($context["customers"] ?? null)) {
            // line 55
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 56
                echo "            <tr>
              <td class=\"text-left\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 57);
                echo "</td>
              <td class=\"text-left\">";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 58);
                echo "</td>
              <td class=\"text-left\">";
                // line 59
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 59);
                echo "</td>
              <td class=\"text-left\">";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 60);
                echo "</td>
              <td class=\"text-right\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "total", [], "any", false, false, false, 61);
                echo "</td>
              <td class=\"text-right\"><a href=\"";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 62);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
        } else {
            // line 66
            echo "            <tr>
              <td class=\"text-center\" colspan=\"6\">";
            // line 67
            echo ($context["text_no_results"] ?? null);
            echo "</td>
            </tr>
            ";
        }
        // line 70
        echo "            </tbody>
            
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 75
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 76
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';
\t
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();
\t
\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}
\t
\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();
\t
\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}
\t
\tlocation = 'index.php?route=report/report&code=customer_transaction&user_token=";
        // line 104
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 109
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 117
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_transaction_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 117,  246 => 109,  238 => 104,  207 => 76,  203 => 75,  196 => 70,  190 => 67,  187 => 66,  184 => 65,  173 => 62,  169 => 61,  165 => 60,  161 => 59,  157 => 58,  153 => 57,  150 => 56,  145 => 55,  143 => 54,  135 => 49,  131 => 48,  127 => 47,  123 => 46,  119 => 45,  115 => 44,  105 => 37,  94 => 29,  83 => 23,  78 => 21,  70 => 18,  66 => 17,  55 => 11,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/report/customer_transaction_info.twig", "");
    }
}
