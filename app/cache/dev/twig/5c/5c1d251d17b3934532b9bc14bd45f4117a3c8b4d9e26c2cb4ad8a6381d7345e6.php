<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_267bc30d2eb97a7c94d4ba0d55ff6f4692ed79836745da69e1789a4fc6366e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_479964a5f5a63ce1dcfd7cb8178bd48d14e18eca73e3cbff8ad22cba2e40e56c = $this->env->getExtension("native_profiler");
        $__internal_479964a5f5a63ce1dcfd7cb8178bd48d14e18eca73e3cbff8ad22cba2e40e56c->enter($__internal_479964a5f5a63ce1dcfd7cb8178bd48d14e18eca73e3cbff8ad22cba2e40e56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_479964a5f5a63ce1dcfd7cb8178bd48d14e18eca73e3cbff8ad22cba2e40e56c->leave($__internal_479964a5f5a63ce1dcfd7cb8178bd48d14e18eca73e3cbff8ad22cba2e40e56c_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_a430dfa8c6b7d0caa7225f3f62d4f05dad491b36a81480029f4e325352e19072 = $this->env->getExtension("native_profiler");
        $__internal_a430dfa8c6b7d0caa7225f3f62d4f05dad491b36a81480029f4e325352e19072->enter($__internal_a430dfa8c6b7d0caa7225f3f62d4f05dad491b36a81480029f4e325352e19072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget_html"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_a430dfa8c6b7d0caa7225f3f62d4f05dad491b36a81480029f4e325352e19072->leave($__internal_a430dfa8c6b7d0caa7225f3f62d4f05dad491b36a81480029f4e325352e19072_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_06cbdb981b7ee5408ccc626420be43818c19ec1339a0b3d38545641243709dd2 = $this->env->getExtension("native_profiler");
        $__internal_06cbdb981b7ee5408ccc626420be43818c19ec1339a0b3d38545641243709dd2->enter($__internal_06cbdb981b7ee5408ccc626420be43818c19ec1339a0b3d38545641243709dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_date_picker_widget"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_06cbdb981b7ee5408ccc626420be43818c19ec1339a0b3d38545641243709dd2->leave($__internal_06cbdb981b7ee5408ccc626420be43818c19ec1339a0b3d38545641243709dd2_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_40128279607a4e73bd64ddfc1e08adbc292955875da695ebc9183c6526625050 = $this->env->getExtension("native_profiler");
        $__internal_40128279607a4e73bd64ddfc1e08adbc292955875da695ebc9183c6526625050->enter($__internal_40128279607a4e73bd64ddfc1e08adbc292955875da695ebc9183c6526625050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget_html"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_40128279607a4e73bd64ddfc1e08adbc292955875da695ebc9183c6526625050->leave($__internal_40128279607a4e73bd64ddfc1e08adbc292955875da695ebc9183c6526625050_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_8bf3103c5a477323724d862f6b5073996346e5bd2628b4c5e384b2429c2fd3cc = $this->env->getExtension("native_profiler");
        $__internal_8bf3103c5a477323724d862f6b5073996346e5bd2628b4c5e384b2429c2fd3cc->enter($__internal_8bf3103c5a477323724d862f6b5073996346e5bd2628b4c5e384b2429c2fd3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_datetime_picker_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8bf3103c5a477323724d862f6b5073996346e5bd2628b4c5e384b2429c2fd3cc->leave($__internal_8bf3103c5a477323724d862f6b5073996346e5bd2628b4c5e384b2429c2fd3cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  191 => 61,  185 => 59,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  154 => 47,  152 => 46,  147 => 45,  144 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* {% block sonata_type_date_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('date_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*             <span class="input-group-addon"><span class="fa fa-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_date_picker_widget_html %}*/
/* */
/* {% block sonata_type_date_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="input-group">*/
/*                 {{ block('sonata_type_date_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_date_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_date_picker_widget %}*/
/* */
/* {% block sonata_type_datetime_picker_widget_html %}*/
/*     {% if datepicker_use_button %}*/
/*         <div class='input-group date' id='dtp_{{ id }}'>*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'data-date-format': moment_format}) %}*/
/*     {{ block('datetime_widget') }}*/
/*     {% if datepicker_use_button %}*/
/*           <span class="input-group-addon"><span class="fa fa-calendar"></span></span>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock sonata_type_datetime_picker_widget_html %}*/
/* */
/* {% block sonata_type_datetime_picker_widget %}*/
/*     {% spaceless %}*/
/*         {% if wrap_fields_with_addons %}*/
/*             <div class="input-group">*/
/*                 {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ block('sonata_type_datetime_picker_widget_html') }}*/
/*         {% endif %}*/
/*         <script type="text/javascript">*/
/*             jQuery(function ($) {*/
/*                 $('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});*/
/*             });*/
/*         </script>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_datetime_picker_widget %}*/
/* */
