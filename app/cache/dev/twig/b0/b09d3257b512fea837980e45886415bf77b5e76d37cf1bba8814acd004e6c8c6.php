<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a53df92fd82faf3246feded0683c9fdcf3090a8ccf4caea1122ea06d2f1bf4cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_be03ec7dc821059146aa83067343f45760c6a88f5116565e62080fd09853ca5a = $this->env->getExtension("native_profiler");
        $__internal_be03ec7dc821059146aa83067343f45760c6a88f5116565e62080fd09853ca5a->enter($__internal_be03ec7dc821059146aa83067343f45760c6a88f5116565e62080fd09853ca5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be03ec7dc821059146aa83067343f45760c6a88f5116565e62080fd09853ca5a->leave($__internal_be03ec7dc821059146aa83067343f45760c6a88f5116565e62080fd09853ca5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a32e978b42fb8782ac470375a22ec380694abafc9ec464122254d7a7dc1a2cc = $this->env->getExtension("native_profiler");
        $__internal_2a32e978b42fb8782ac470375a22ec380694abafc9ec464122254d7a7dc1a2cc->enter($__internal_2a32e978b42fb8782ac470375a22ec380694abafc9ec464122254d7a7dc1a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a32e978b42fb8782ac470375a22ec380694abafc9ec464122254d7a7dc1a2cc->leave($__internal_2a32e978b42fb8782ac470375a22ec380694abafc9ec464122254d7a7dc1a2cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8e239598ebf3d536ecee5f299d77fdb04adf141b1512cc2e2ef0dbea7909572 = $this->env->getExtension("native_profiler");
        $__internal_c8e239598ebf3d536ecee5f299d77fdb04adf141b1512cc2e2ef0dbea7909572->enter($__internal_c8e239598ebf3d536ecee5f299d77fdb04adf141b1512cc2e2ef0dbea7909572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8e239598ebf3d536ecee5f299d77fdb04adf141b1512cc2e2ef0dbea7909572->leave($__internal_c8e239598ebf3d536ecee5f299d77fdb04adf141b1512cc2e2ef0dbea7909572_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ffd4fc381d4cdb29344c270a07b2b1e97e2220eede87984f9162b3c3384e5a26 = $this->env->getExtension("native_profiler");
        $__internal_ffd4fc381d4cdb29344c270a07b2b1e97e2220eede87984f9162b3c3384e5a26->enter($__internal_ffd4fc381d4cdb29344c270a07b2b1e97e2220eede87984f9162b3c3384e5a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffd4fc381d4cdb29344c270a07b2b1e97e2220eede87984f9162b3c3384e5a26->leave($__internal_ffd4fc381d4cdb29344c270a07b2b1e97e2220eede87984f9162b3c3384e5a26_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
