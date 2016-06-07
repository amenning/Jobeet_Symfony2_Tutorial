<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_2a845527b954d4478965cea4ed98314fe3703d5d112f002cb93d9a309fb8ff31 extends Twig_Template
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
        $__internal_697a2f4c3d5f9549dbebff4ec1d0d3c02dabbad4292d574fdb8dbe94bf6627dc = $this->env->getExtension("native_profiler");
        $__internal_697a2f4c3d5f9549dbebff4ec1d0d3c02dabbad4292d574fdb8dbe94bf6627dc->enter($__internal_697a2f4c3d5f9549dbebff4ec1d0d3c02dabbad4292d574fdb8dbe94bf6627dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697a2f4c3d5f9549dbebff4ec1d0d3c02dabbad4292d574fdb8dbe94bf6627dc->leave($__internal_697a2f4c3d5f9549dbebff4ec1d0d3c02dabbad4292d574fdb8dbe94bf6627dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6662b8ef9f508ea03b6dcdb62591196068821a9b2b2bd737962bc99e339ad60b = $this->env->getExtension("native_profiler");
        $__internal_6662b8ef9f508ea03b6dcdb62591196068821a9b2b2bd737962bc99e339ad60b->enter($__internal_6662b8ef9f508ea03b6dcdb62591196068821a9b2b2bd737962bc99e339ad60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6662b8ef9f508ea03b6dcdb62591196068821a9b2b2bd737962bc99e339ad60b->leave($__internal_6662b8ef9f508ea03b6dcdb62591196068821a9b2b2bd737962bc99e339ad60b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7775fd60100d4e120b9bb79fef3eae2bcbc0ebc7d7090a2b6386343b98497752 = $this->env->getExtension("native_profiler");
        $__internal_7775fd60100d4e120b9bb79fef3eae2bcbc0ebc7d7090a2b6386343b98497752->enter($__internal_7775fd60100d4e120b9bb79fef3eae2bcbc0ebc7d7090a2b6386343b98497752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7775fd60100d4e120b9bb79fef3eae2bcbc0ebc7d7090a2b6386343b98497752->leave($__internal_7775fd60100d4e120b9bb79fef3eae2bcbc0ebc7d7090a2b6386343b98497752_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb55e726f22a7c15e3c89afbf8a8223535fe3bcf7ce1e6478dc83c808515477d = $this->env->getExtension("native_profiler");
        $__internal_eb55e726f22a7c15e3c89afbf8a8223535fe3bcf7ce1e6478dc83c808515477d->enter($__internal_eb55e726f22a7c15e3c89afbf8a8223535fe3bcf7ce1e6478dc83c808515477d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_eb55e726f22a7c15e3c89afbf8a8223535fe3bcf7ce1e6478dc83c808515477d->leave($__internal_eb55e726f22a7c15e3c89afbf8a8223535fe3bcf7ce1e6478dc83c808515477d_prof);

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
