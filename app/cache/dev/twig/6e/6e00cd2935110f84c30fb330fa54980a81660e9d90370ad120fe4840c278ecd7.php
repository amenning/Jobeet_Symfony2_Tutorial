<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f732ade2649809760573f5532d49062052050ff62798e62cf83a8985a532e701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_058c3954787efe7af1504fc4e63038b010eb396758ddc9876db2bae092b8e221 = $this->env->getExtension("native_profiler");
        $__internal_058c3954787efe7af1504fc4e63038b010eb396758ddc9876db2bae092b8e221->enter($__internal_058c3954787efe7af1504fc4e63038b010eb396758ddc9876db2bae092b8e221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_058c3954787efe7af1504fc4e63038b010eb396758ddc9876db2bae092b8e221->leave($__internal_058c3954787efe7af1504fc4e63038b010eb396758ddc9876db2bae092b8e221_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b99311526de539ab60ba5a190e5b50ea9a15a90a48bae474349413b311350c3d = $this->env->getExtension("native_profiler");
        $__internal_b99311526de539ab60ba5a190e5b50ea9a15a90a48bae474349413b311350c3d->enter($__internal_b99311526de539ab60ba5a190e5b50ea9a15a90a48bae474349413b311350c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b99311526de539ab60ba5a190e5b50ea9a15a90a48bae474349413b311350c3d->leave($__internal_b99311526de539ab60ba5a190e5b50ea9a15a90a48bae474349413b311350c3d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e9cb6676785307d8e3e9cb24f6196fc48169ae432792c4d45be2caa17735113 = $this->env->getExtension("native_profiler");
        $__internal_8e9cb6676785307d8e3e9cb24f6196fc48169ae432792c4d45be2caa17735113->enter($__internal_8e9cb6676785307d8e3e9cb24f6196fc48169ae432792c4d45be2caa17735113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e9cb6676785307d8e3e9cb24f6196fc48169ae432792c4d45be2caa17735113->leave($__internal_8e9cb6676785307d8e3e9cb24f6196fc48169ae432792c4d45be2caa17735113_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32573ff5e3cb2010f4dcad86e2335df33c23b6ae05d3282d89e2da03bb729bb0 = $this->env->getExtension("native_profiler");
        $__internal_32573ff5e3cb2010f4dcad86e2335df33c23b6ae05d3282d89e2da03bb729bb0->enter($__internal_32573ff5e3cb2010f4dcad86e2335df33c23b6ae05d3282d89e2da03bb729bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_32573ff5e3cb2010f4dcad86e2335df33c23b6ae05d3282d89e2da03bb729bb0->leave($__internal_32573ff5e3cb2010f4dcad86e2335df33c23b6ae05d3282d89e2da03bb729bb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
