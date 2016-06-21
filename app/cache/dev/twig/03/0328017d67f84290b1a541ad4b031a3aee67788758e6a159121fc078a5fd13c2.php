<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a02b83c9b654be91b570d298377660eaab753c7ca55a4962bb7be411c1c5fa4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59fb34e3ba06f43658dfc1e25593db9100dd39526f081e02226144a2cb19ee3c = $this->env->getExtension("native_profiler");
        $__internal_59fb34e3ba06f43658dfc1e25593db9100dd39526f081e02226144a2cb19ee3c->enter($__internal_59fb34e3ba06f43658dfc1e25593db9100dd39526f081e02226144a2cb19ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59fb34e3ba06f43658dfc1e25593db9100dd39526f081e02226144a2cb19ee3c->leave($__internal_59fb34e3ba06f43658dfc1e25593db9100dd39526f081e02226144a2cb19ee3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_615777db346fa41ac647f10d1dcce9ed52d40499cc8b3f753efc0d40350450d1 = $this->env->getExtension("native_profiler");
        $__internal_615777db346fa41ac647f10d1dcce9ed52d40499cc8b3f753efc0d40350450d1->enter($__internal_615777db346fa41ac647f10d1dcce9ed52d40499cc8b3f753efc0d40350450d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_615777db346fa41ac647f10d1dcce9ed52d40499cc8b3f753efc0d40350450d1->leave($__internal_615777db346fa41ac647f10d1dcce9ed52d40499cc8b3f753efc0d40350450d1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_302a9410f59225207f937a4f879fe9edb94efdd1eed32fd8fc32e979bafa2ec6 = $this->env->getExtension("native_profiler");
        $__internal_302a9410f59225207f937a4f879fe9edb94efdd1eed32fd8fc32e979bafa2ec6->enter($__internal_302a9410f59225207f937a4f879fe9edb94efdd1eed32fd8fc32e979bafa2ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_302a9410f59225207f937a4f879fe9edb94efdd1eed32fd8fc32e979bafa2ec6->leave($__internal_302a9410f59225207f937a4f879fe9edb94efdd1eed32fd8fc32e979bafa2ec6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc15406c3531c823dc4fcf718d746593944d97cfdc73045cd5e1f55619b0f2eb = $this->env->getExtension("native_profiler");
        $__internal_fc15406c3531c823dc4fcf718d746593944d97cfdc73045cd5e1f55619b0f2eb->enter($__internal_fc15406c3531c823dc4fcf718d746593944d97cfdc73045cd5e1f55619b0f2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fc15406c3531c823dc4fcf718d746593944d97cfdc73045cd5e1f55619b0f2eb->leave($__internal_fc15406c3531c823dc4fcf718d746593944d97cfdc73045cd5e1f55619b0f2eb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
